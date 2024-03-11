#!/bin/sh

gc_output=`script -q -c 'git gc' | grep Total`
object_count=$(echo $gc_output | awk -F ' |\(|\)' '{print $2}')
delta_count=$(echo $gc_output | awk -F ' |\(|\)' '{print $5}')

verify_pack_output=`git verify-pack -v objects/pack/pack-*.pack .git/objects/pack/pack-*.pack 2>/dev/null`
largest_object=$(echo "$verify_pack_output" | grep blob | sort -k3nr | head -n 1 | awk '{print $3/1024" KiB"}')
largest_commit=$(echo "$verify_pack_output" | grep 'tree\|commit\|tag' | sort -k3nr | head -n 1 | awk '{print $3/1024" KiB"}')
longest_delta_chain=$(echo "$verify_pack_output" | grep chain | tail -n 1 | awk -F ' |:' '{print $4}')

branch_count=`git branch -a | grep remotes/origin | grep -v HEAD | wc -l`
if [ $branch_count -eq 0 ]; then
    branch_count=`git branch -l | wc -l`
fi

echo "Size: `git count-objects -v | grep size-pack | awk '{print $2}'` KiB"
echo "Branches: $branch_count"
echo "Tags: `git show-ref --tags | wc -l`"
echo "Commits: `git rev-list --all | wc -l`"
echo "Objects: $object_count"
echo "Delta objects: $delta_count"
echo "Largest blob: $largest_object"
echo "Largest commit/tag/tree: $largest_commit"
echo "Longest delta chain: $longest_delta_chain"
